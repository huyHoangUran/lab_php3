<div class="container"> 
    <div>
        @include('.blocks.master')
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Mối quan hệ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($relatives as $key => $item)
                    
                <tr>

                    <td>{{$key+=1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->relations}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>