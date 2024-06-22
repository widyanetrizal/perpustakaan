<?php

namespace App\Http\Controllers;

use App\Models\Book; // Ganti Movie dengan Book
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller // Ganti MovieController dengan BookController
{
    public function home()
    {

        $query = Book::latest(); // Ganti Movie dengan Book
        if (request('search')) {
            $query->where('title', 'like', '%' . request('search') . '%') // Ganti judul dan sinopsis sesuai dengan field di model Book
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
        $books = $query->paginate(6)->withQueryString(); // Ganti movies dengan books
        return view('beranda', compact('books')); // Ganti movies dengan books
    }

    public function index()
    {

        $query = Book::latest(); // Ganti Movie dengan Book
        if (request('search')) {
            $query->where('title', 'like', '%' . request('search') . '%') // Ganti judul dan sinopsis sesuai dengan field di model Book
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
        $books = $query->paginate(6)->withQueryString(); // Ganti movies dengan books
        return view('homepage', compact('books')); // Ganti movies dengan books
    }

    public function koleksi()
    {

        $query = Book::latest(); // Ganti Movie dengan Book
        if (request('search')) {
            $query->where('title', 'like', '%' . request('search') . '%') // Ganti judul dan sinopsis sesuai dengan field di model Book
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
        $books = $query->paginate(6)->withQueryString(); // Ganti movies dengan books
        return view('koleksi', compact('books')); // Ganti movies dengan books
    }

    public function detail($id)
    {
        $book = Book::find($id);

        return view('detail', compact('book')); // Ganti movie dengan book
    }

    public function create()
    {
        $categories = Category::all();
        return view('input', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'string', 'max:255', Rule::unique('books', 'id')],
            'title' => 'required|string|max:355', // Ganti judul sesuai dengan field di model Book
            'category_id' => 'required|integer',
            'description' => 'required|string', // Ganti sinopsis sesuai dengan field di model Book
            'tahun' => 'required|integer',
            'pengarang' => 'required|string',
            'penerbit' => 'required|string',
            'halaman' => 'required|integer',
            'foto_sampul' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Jika validasi gagal, kembali ke halaman input dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect('books/create') // Ganti movies dengan books
                ->withErrors($validator)
                ->withInput();
        }

        $randomName = Str::uuid()->toString();
        $fileExtension = $request->file('foto_sampul')->getClientOriginalExtension();
        $fileName = $randomName . '.' . $fileExtension;

        // Simpan file foto ke folder public/images
        $request->file('foto_sampul')->move(public_path('images'), $fileName);
        // Simpan data ke table books
        Book::create([ // Ganti Movie dengan Book
            'id' => $request->id,
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'tahun' => $request->tahun,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'halaman' => $request->halaman,
            'foto_sampul' => $fileName,
        ]);

        return redirect('/books/data')->with('success', 'Data berhasil disimpan');
    }

    public function data()
    {
        $books = Book::latest()->paginate(10);
        return view('data-book', compact('books'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $categories = Category::all();
        return view('form-edit', compact('book', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'description' => 'required|string',
            'tahun' => 'required|integer',
            'pengarang' => 'required|string',
            'penerbit' => 'required|string',
            'halaman' => 'required|integer',
            'foto_sampul' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Jika validasi gagal, kembali ke halaman edit dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect("/books/{$id}/edit")
                ->withErrors($validator)
                ->withInput();
        }

        // Ambil data movie yang akan diupdate
        $book = Book::findOrFail($id);

        // Jika ada file yang diunggah, simpan file baru
        if ($request->hasFile('foto_sampul')) {
            $randomName = Str::uuid()->toString();
            $fileExtension = $request->file('foto_sampul')->getClientOriginalExtension();
            $fileName = $randomName . '.' . $fileExtension;

            // Simpan file foto ke folder public/images
            $request->file('foto_sampul')->move(public_path('images'), $fileName);

            // Hapus foto lama jika ada
            if (File::exists(public_path('images/' . $book->foto_sampul))) {
                File::delete(public_path('images/' . $book->foto_sampul));
            }

            // Update record di database dengan foto yang baru
            $book->update([
                'judul' => $request->judul,
                'sinopsis' => $request->sinopsis,
                'category_id' => $request->category_id,
                'tahun' => $request->tahun,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'halaman' => $request->halaman,
                'foto_sampul' => $fileName,
            ]);
        } else {
            // Jika tidak ada file yang diunggah, update data tanpa mengubah foto
            $book->update([
                'judul' => $request->judul,
                'sinopsis' => $request->sinopsis,
                'category_id' => $request->category_id,
                'tahun' => $request->tahun,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'halaman' => $request->halaman,
            ]);
        }

        return redirect('/books/data')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);

        // Delete the movie's photo if it exists
        if (File::exists(public_path('images/' . $book->foto_sampul))) {
            if ($book->foto_sampul != 'default.jpg') {
                File::delete(public_path('images/' . $book->foto_sampul));
            }
        }

        // Delete the movie record from the database
        $book->delete();

        return redirect('/books/data')->with('success', 'Data berhasil dihapus');
    }
}