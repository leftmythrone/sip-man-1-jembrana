@extends('layouts.main')

@section('gate')

{{-- CSS Link --}}
<link rel="stylesheet" href="/css/component/table.css">

<!-- Content Section -->

{{-- Heder tabel --}}
<div class="tabheader">

    {{-- Judul halaman --}}
    <h1>Page {{ $title }}</h1>

    {{-- Ringkasan halaman --}}
    <h4>Pada page ini berisi seluruh jurusan pada <br>Madrasah Aliyah 1 Jembrana</h4>
</div>







<div class="tables">
    {{-- SEARCH FEATURE --}}
    <div class="tabsearch">
        <form action="/income/searchcat">
            <p>Search: <input type="text" name="searchcat" placeholder="search . ." value=""></p>
            <button type="submit">Find</button>
        </form>
    </div>

    {{-- SHOWING ENTRIES --}}

    <p>Show  entries </p> 
    {{-- TABLE --}}

        <div class="tabtable">    
            <table width="100%">
                <tr>
                    {{-- TABLE HEADER --}}
                    <th><center>No</center></th>
                    <th><center>Nama Jurusan</center></th> 
                    <th><center>Action</center></th>
                </tr>
                <tr>
                    {{-- LINE CUTTER --}}
                    <td colspan="99"><div class="line"></div></td>
                </tr>
        
                    {{-- FOR EACH --}}
                    @foreach ($department as $dpt) 
                <tr>
                    {{-- TABLE MAIN SECTION --}}
                    <td><center>{{ $dpt->id }}.</center></td>
                    <td><center>{{ $dpt->department_name }}</center></td>
                    <td>
                        <center>
                            <a href=""><button><img src="/img/eye_white.png" alt=""></button></a>
                            <a href=""><button><img src="/img/pencil_white.png" alt=""></button></a> 
                            <a href=""><button><img src="/img/trash_white.png" alt=""></button></a>
                        </center>
                    </td>
                </tr>
                <tr>
                    {{-- SPACER --}}
                    <td><div class="space"></div></td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="99"><hr></td>
                </tr>
            </table>

        </div> 
    <br>
    {{-- ENTRIES --}}
    <p>Showing 0 to 0 of 0 entries</p>
    
</div>

        
@endsection



