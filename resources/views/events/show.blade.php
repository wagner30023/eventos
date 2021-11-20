@extends('layouts.main')

@section('title', $event->title)

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                {{-- <br> --}}
                <img src="/img/events/{{ $event->image }}" class="img-fluid" width="340px"
                    alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                {{-- <br> --}}
                <h1>{{ $event->title }}</h1>
                <p class="event-city">
                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/zzcjjxew.json" trigger="loop"
                        colors="primary:#121331,secondary:#08a88a" style="width:30px;height:30px">
                    </lord-icon> {{ $event->city }}
                </p>
                <p class="events-participants">
                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/imamsnbq.json" trigger="loop"
                        colors="primary:#121331,secondary:#08a88a" style="width:30px;height:30px">
                    </lord-icon> X participantes
                </p>
                <p class="event-owner">
                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/mdgrhyca.json" trigger="loop"
                        colors="primary:#121331,secondary:#08a88a" style="width:30px;height:30px">
                    </lord-icon> {{$eventOwner['name']}}
                </p>
                <a href="#" class="btn btn-primary" id="event-submit"> Confirmar presença </a>
                <br><br>
                <h3> O evento conta com: </h3>
                <ul id="items-list">
                    @foreach ($event->items as $item)
                        <li>
                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/jvihlqtw.json" trigger="loop"
                                colors="primary:#121331,secondary:#08a88a" style="width:30px;height:30px">
                            </lord-icon>
                            <span> {{ $item }} </span>
                        </li>
                    @endforeach
                </ul>
                <div class="col-md-12 mt-3" id="description-container">
                    <h3>Sobre o evento:</h3>
                    <p class="event-description">{{ $event->description }}</p>
                </div>
            </div>
        </div>

    @endsection
