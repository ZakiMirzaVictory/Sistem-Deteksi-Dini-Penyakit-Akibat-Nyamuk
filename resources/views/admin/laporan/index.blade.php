@extends('layouts.app')

@section('content')
<div class="page-head">
    <div>
        <h1>Kelola Pengguna</h1>
        <p>Manajemen data seluruh pengguna sistem.</p>
    </div>
</div>


<div class="card">

    <div class="toolbar">

        <div class="search-box">

            <svg viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="7"/>
                <path d="M21 21l-4.3-4.3"/>
            </svg>

            <input type="text"
                placeholder="Cari berdasarkan nama atau email...">

        </div>

        <button class="btn btn-primary btn-sm">
            + Tambah Pengguna
        </button>

    </div>


    <div class="table-wrap">

        <table>

            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>Wahyu Zizi Febriani</td>
                    <td>wahyu@gmail.com</td>
                    <td>081234567890</td>

                    <td>
                        <span class="badge badge-muted">
                            Masyarakat
                        </span>
                    </td>

                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;margin-right:12px;">
                            Edit
                        </a>

                        <a href="#"
                            style="color:var(--primary-dark);font-weight:600;">
                            Hapus
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>Muhammad Zidni</td>
                    <td>zidni@gmail.com</td>
                    <td>082345678901</td>

                    <td>
                        <span class="badge badge-muted">
                            Masyarakat
                        </span>
                    </td>

                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;margin-right:12px;">
                            Edit
                        </a>

                        <a href="#"
                            style="color:var(--primary-dark);font-weight:600;">
                            Hapus
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>Zaki Mirza Victory</td>
                    <td>zaki@pnm.ac.id</td>
                    <td>083456789012</td>

                    <td>
                        <span class="badge badge-success">
                            Admin
                        </span>
                    </td>

                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;margin-right:12px;">
                            Edit
                        </a>

                        <a href="#"
                            style="color:var(--primary-dark);font-weight:600;">
                            Hapus
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>Budi Santoso</td>
                    <td>budi@gmail.com</td>
                    <td>084567890123</td>

                    <td>
                        <span class="badge badge-muted">
                            Masyarakat
                        </span>
                    </td>

                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;margin-right:12px;">
                            Edit
                        </a>

                        <a href="#"
                            style="color:var(--primary-dark);font-weight:600;">
                            Hapus
                        </a>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>