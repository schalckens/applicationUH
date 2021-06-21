@extends('layouts.app')

@section('title')
    Address
@endsection

@section('content')

    {{--  <h1>Addresses:</h1>  --}}
    <div id="root"></div>
    
    <script type="text/babel">
        const root = document.getElementById('root')
        
        function Compo ({data}) {
            return (
                <section>
                    <h1>{data}</h1>
                </section>
            );
        }

        function Template () { 
            const title = "Adresse :";
            return (
                <main>
                    <Compo data={title} />
                </main>
            );
        
        }
        ReactDOM.render(<Template />,root);
    </script>
    
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <button><a class="btn btn-secondary" href="{{ route('addresses.create') }}" role="button">Créer une Adresse</a></button>
    @foreach($addresses as $address)
        
        <div>
            <button><a class="btn btn-secondary"  href="{{ route('addresses.show',['id' => $address->id]) }}" role="button">Sélectionner</a></button>
            <a>{{ $address->address }}, {{ $address->address2 }}, {{ $address->city }}, {{ $address->zip_code }}</a>
            <button><a class="btn btn-secondary"  href="{{ route('addresses.edit',['id' => $address->id]) }}" role="button">Editer</a></button>
            <form action="{{ route('addresses.delete',['id' => $address->id]) }}" method="post">
                @csrf
                <button><a role="button">Supprimer</a></button>
            </form>
        </div>

    @endforeach
@endsection
