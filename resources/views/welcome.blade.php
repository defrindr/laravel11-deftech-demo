@extends('layouts.main')

@section('title', 'Beranda')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">
        Beranda
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>Card 1</h3>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum quam quis voluptatibus dolore beatae
                        voluptates rerum laboriosam ratione culpa, facere error laborum sit eius, est ipsum in corrupti
                        dolorem voluptate?
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
