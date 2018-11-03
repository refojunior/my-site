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
                            <!-- form (for delete) -->
                            <form action="{{ route('category.destroy', ['id' => $row->id] ) }}" id="delete-category" method="post">
                                <!-- EDIT BUTTON -->
                                <a href="{{ route('category.edit', ['id' => $row['id']]) }}" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a>
                                <!-- DELET BUTTON -->
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Delet Data?')">
                                    <i class="fa fa-trash"></i> 
                                </button>
                                @csrf 
                                @method('DELETE')
                            </form>
                            <!-- END FORM -->
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


