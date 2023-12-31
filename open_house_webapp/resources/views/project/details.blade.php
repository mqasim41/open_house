<!-- resources/views/project_details.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Project Details') }}</div>

                    <div class="card-body">
                        <h2>{{ $project->project_name }}</h2>
                        
                        <p><strong>Category:</strong> {{ $project->project_category }}</p>
                        <p><strong>Description:</strong> {{ $project->project_description }}</p>
                        <p><strong>Stall Location:</strong> {{ $project->stall_location }}</p>
                        <p><strong>Keywords:</strong> {{ $project->keywords }}</p>

                        <!-- Add more details as needed -->

                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Project Evaluations') }}</div>
                    @foreach($evaluations as $evaluation)
                    <div class="card-body">
                        <p><strong>Evaluator Name:</strong> {{ $evaluation->evaluator->user->name }}</p>
                        <p><strong>Status:</strong> {{ $evaluation->project->is_evaluated ? 'Evaluated' : 'Not Evaluated' }}</p>
                    </div>
                    @endforeach

                </div>
                
            </div>
        </div>
    </div>
@endsection
