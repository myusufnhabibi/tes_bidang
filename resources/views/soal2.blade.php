<table style="border: 1px solid #999;">
    <tr>
      <th>ID</th>
      <th>EMAIL</th>
      <th>FIRST NAME</th>
      <th>LAST NAME</th>
      <th>FOTO</th>
      <th></th>
    </tr>
    @foreach ($users as $item)
    <tr>
      <td>{{$item['id']}}</td>
      <td>{{$item['email']}}</td>
      <td>{{$item['first_name']}}</td>
      <td>{{$item['last_name']}}</td>
      <td><img src="{{$item['avatar']}}" /></td>
    </tr>
    @endforeach
  </table>