@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form method="POST" action="/products">
                    @csrf

                    <div class="card-body">
                        <div class="card" style="margin-bottom: 2em">
                            <div class="card-body">
                                <h2>Title</h2>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input class="input-group" type="text" name="title" id="title">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="margin-bottom: 2em">
                            <div class="card-body">
                                <h2>Description</h2>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input class="input-group" type="text" name="description" id="description">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="margin-bottom: 2em">
                            <div class="card-body">
                                <h2>Price</h2>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input class="input-group" type="number" name="price" id="price">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="margin-bottom: 2em">
                            <div class="select is-multiple control">
                                <h2>Tags</h2>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <select
                                            name="tags[]"
                                            multiple>
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="button-blue">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

