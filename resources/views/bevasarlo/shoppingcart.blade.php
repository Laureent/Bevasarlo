@extends('layouts.main')
@section('content')
    <div class="row">
    <table class="table table-striped" id="list">
        <thead>
            <td>Termék neve</td>
            <td>Mennyiség</td>
            <td></td>
        </thead>
        <tbody>

        </tbody>
    </table>
    </div>
@endsection
@section('js')
    <script>
        fetch('{{route("shoppinglist.show")}}').then(response => response.json()).then(datas => showList(datas));

        function showList(datas) {
            document.querySelector('#list>tbody').innerHTML = "";
            let out ='';
            for (let data of datas){
                out +=`
                    <tr>
                        <td>${data.name}</td>
                        <td>${data.amount}</td>
                        <td>
                            <button class="btn btn-danger" onclick="deleteItem(${data.id})">X</button>
                        </td>
                    </tr>
                `;
            }
            out +=`
                <tr>
                    <td><input type="text" placeholder="Termék" id="product"></td>
                    <td><input type="text" placeholder="Mennyiség" id="amount"></td>
                    <td>
                        <button class="btn btn-success" onclick="addItem()">Hozzáadás</button>
                    </td>
                </tr>
            `;
            document.querySelector('#list>tbody').innerHTML = out;
        }

        function deleteItem(id) {
            fetch('api/shoppinglist/'+id,{method:'DELETE'}).then(response => response.json()).then(datas => showList(datas));
            fetch('{{route("shoppinglist.show")}}').then(response => response.json()).then(datas => showList(datas));
        }

        function addItem(){
            const formData = new FormData();
            formData.append('name',document.getElementById('product').value);
            formData.append('amount',document.getElementById('amount').value);
            fetch('{{route("addItem")}}',{method:'POST', body: formData}).then(response => response.json()).then(datas => showList(datas));
            fetch('{{route("shoppinglist.show")}}').then(response => response.json()).then(datas => showList(datas));
        }
    </script>
@endsection