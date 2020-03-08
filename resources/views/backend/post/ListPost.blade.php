@extends('layouts')


@section('contents')


<div class="row" style="margin-left:300px">
    <div class="col-11 table-responsive ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Hình Ảnh</th>
                    <th>Tiêu Đề</th>
                    <th>Danh Mục</th>
                    <th></th>
                    <th></th>
                    <th><a href="{{ route('posts.create') }}" class="btn btn-success">Thêm</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                <tr>
                    <td><img src="storage/{{ $item->image }}" width="70px" height="50px"></td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->ShowNameCategory['name'] }}</td>
                    <th><a href="{{ route('posts.show',$item->id) }}" class="btn btn-info">Chi tiết</a></th>
                    <th><a href="{{ route('posts.edit',$item->id) }}" class="btn btn-secondary ">Sửa</a></th>
                    <th>
                        <button id="btn_delete_{{ $item->id }}" class="btn btn-danger">
                            Xóa
                        </button>

                        <form id="delete_form_{{ $item->id }}" action="{{ route('posts.destroy', $item->id) }}"
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
