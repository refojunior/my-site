@extends('backend.app')

@section('title')
Category 
@endsection

@section('content')

<div class="row">
    <div class="col-md-12"><a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Add Category</a></div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Category</h3> 
            @if(count($categories) != 0)
            <table class="table">
            	<thead>
            		<tr>
            			<th>No</th>
            			<th>Name</th>
            			<th>Action</th>
            		</tr>
            	</thead>
                <tbody>
                @foreach($categories as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row['name'] }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else 
            <p>Tidak Ada Data</p>
            @endif
        </div>

    </div>
</div>

@endsection

@push('scripts')
@if(Session::get('flashs'))
<script>
    // toat popup js
    var xflash = new XMLHttpRequest();
    xflash.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var properties = JSON.parse(this.responseText);
            console.log(properties);
            $.toast({
                heading: properties.heading,
                text: properties.text,
                position: 'top-right',
                bgColor: properties.bgColor,
                loaderBg: '#fff',
                icon: properties.icon,
                hideAfter: 5000,
                stack: 6
            })
        }
    };
    xflash.open("GET", '../flash-json');
    xflash.send();
   
</script>
@endif
@endpush
