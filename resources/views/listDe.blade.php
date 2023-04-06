<div class="container">
    <div>
        @include('blocks.master')
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên phòng</th>
                    <th>Số điện thoại</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $key => $department)
                    
                    <tr>
                        <td scope="row">{{$key}}</td>
                        <td>{{$department->name}}</td>
                        <td>{{$department->phone_number}}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>