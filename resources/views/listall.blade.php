
   <div class="container">
     
    <div>
        @include('blocks.master')

    </div>
    <div>
        <table class="table" >
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Tên nhân viên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Tuổi</th>
                    <th>Tên phòng ban</th>
                    <th> Số người thân</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eplys as $key => $as)
            
                    <tr>
                        <td scope="row">{{$key+=1}}</td>
                        <td >{{$as->name}}</td>
                        <td>{{$as->phone_number}}</td>
                        <td>{{$as->email}}</td>
                        <td>{{rand(20,50)}}</td>
                        <td>{{$as->deName}}</td>
                        <td><a href="listRela/{{$as->id}}">{{$as->So_NGT}}</a></td>
    
                        <td></td>
                    </tr>
                @endforeach
               
            </tbody>
        </table>
        
    </div>
    
   </div>