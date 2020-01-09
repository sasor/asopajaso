@extends('master')

@section('content')

    <div class="card">

        <div class="card-header">

            Lista de ACM

        </div>

        <div class="card-body">

        <ul>

            @foreach($acms as $acm)
                <li>{{$acm->label}}</li>
                @if($acm->jamie()->exists())
                    <ul>
                        @foreach($acm->jamie as $acmHijo)
                            <li>{{$acmHijo->label}}</li>
                            @if($acmHijo->jamie()->exists())
                                <ul>
                                    @foreach($acmHijo->jamie as $a)
                                        <li>{{$a->label}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        @endforeach
                    </ul>
                @endif
            @endforeach

        </ul>

        </div>

    </div>

@endsection
