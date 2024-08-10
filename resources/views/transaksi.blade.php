<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.tailwindcss.css">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="drawer drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
            <!-- Page content here -->
            <h1 class="h1 font-bold text-5xl mb-5">Transaksi</h1>
            <div class="container flex justify-center m-5">
                <a class="btn btn-accent m-3" href="/transaksi/create">Tambah Data</a>
                <button class="btn btn-accent m-3" onclick="my_modal_1.showModal()">Upload Excel</button>
            </div>
            <div class="overflow-x-auto mx-5 w-100" >
                <table id="transaksi" class="w-100">
                    <thead>
                        <th>Kode Toko</th>
                        <th>Nominal Transaksi</th>
                        <th>Hapus</th>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $tr)
                            <tr>
                                <td>{{ $tr->kode_toko }}</td>
                                <td>{{ $tr->nominal_transaksi }}</td>
                                <td>
                                    <form action="/transaksi/{{ $tr->kode_toko }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
                <!-- Sidebar content here -->
                <li><a>Tranksaksi</a></li>
            </ul>
        </div>
    </div>

    <dialog id="my_modal_1" class="modal">
        <div class="modal-box">
            <h2 class="text-lg font-bold mb-3">Upload File Excel</h2>
            <div class="">
                <form action="/transaksi/excel" method="post" enctype="multipart/form-data">
                    <input type="file" class="file-input file-input-bordered file-input-accent w-full max-w-xs" name="excel"/>
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn text-center" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </dialog>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script> 
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script> 
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.tailwindcss.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.js"></script> 
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.dataTables.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script> 
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.html5.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"></script> 
    <script>
        $(document).ready(function(){
            $("button").addClass("btn btn-accent mx-2")
        });
        new DataTable('#transaksi', {
            
            layout: {
                topStart: {
                    buttons: ['excel', 'pdf']
                }
            }
    
        });
    </script>
</body>
</html>