@extends('layouts')


@section('contents')


<div class="row" style="margin-left:300px">
    <div class="col-11 table-responsive ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name </th>
                    <th>Người tạo</th>
                    <th></th>
                    <th></th>
                    <th><a href="{{ route('category.create') }}" class="btn btn-success">Thêm</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->ShowNameUser['name'] }}</td>
                    <th><a href="{{ route('category.show',$item->id) }}" class="btn btn-info">Chi tiết</a></th>
                    <th><a href="{{ route('category.edit',$item->id) }}" class="btn btn-secondary ">Sửa</a></th>
                    <th>
                        <button id="btn_delete_{{ $item->id }}" class="btn btn-danger">Xóa</button>

                        <form id="delete_form_{{ $item->id }}" action="{{ route('category.destroy', $item->id) }}"
                            method="POST" style="display: none;">
                            @method('DELETE')
                            @csrf
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>




@endsection
@push('scripts')
<script>
    $("button[id^='btn_delete_']").click(function (event) {
        id = event.currentTarget.attributes.id.value.replace('btn_delete_', '');
        console.log('id', id);

        $("#delete_form_" + id).submit();
    });

</script>
@endpush
