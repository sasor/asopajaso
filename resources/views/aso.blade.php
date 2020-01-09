@extends('master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <form action="{{ route('aso') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="anonymous">anonymous</label>
                    <select class="form-control" id="anonymous" name="anonymous">
                        @if(isset($aso))
                            <option value="1" @if($aso->anonymous == 'YES') selected @endif>YES</option>
                            <option value="0" @if($aso->anonymous == 'NO') selected @endif>NO</option>
                        @else
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="local">local enables</label>
                    <select class="form-control" id="local" name="local">
                        @if(isset($aso))
                            <option value="1" @if($aso->local == 'YES') selected @endif>YES</option>
                            <option value="0" @if($aso->local == 'NO') selected @endif>NO</option>
                        @else
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="write">write enables</label>
                    <select class="form-control" id="write" name="write">
                        @if(isset($aso))
                            <option value="1" @if($aso->write == 'YES') selected @endif>YES</option>
                            <option value="0" @if($aso->write == 'NO') selected @endif>NO</option>
                        @else
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="chroot">chroot</label>
                    <select class="form-control" id="chroot" name="chroot">
                        @if(isset($aso))
                            <option value="1" @if($aso->chroot == 'YES') selected @endif>YES</option>
                            <option value="0" @if($aso->chroot == 'NO') selected @endif>NO</option>
                        @else
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @if(isset($aso) && $aso->active == 'NO')
        <div class="col-xs-4">
            <form action="{{ route('aso.start') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="start" value="1">
                    <button>iniciar</button>
                </div>
            </form>
        </div>
        @else
        <div class="col-xs-4">
            <form action="{{ route('aso.stop') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="stop" value="1">
                    <button>detener</button>
                </div>
            </form>
        </div>
        <div class="col-xs-4">
            <form action="{{ route('aso.restart') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="restart" value="1">
                    <button>reiniciar</button>
                </div>
            </form>
        </div>
        @endif
    </div>
@endsection
