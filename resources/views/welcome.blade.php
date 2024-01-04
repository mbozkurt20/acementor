@extends('components.layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-promotion/>
            </div>
        </div>
    </div>

    <x-bar/>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-service-step/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <x-services/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <x-deals/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <x-student-review/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <x-package/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <x-comments/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <x-consultant-videos/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <x-calendly/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <x-FrequentlyAskedQuestions/>
            </div>
        </div>
    </div>

@endsection