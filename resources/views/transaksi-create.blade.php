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
            <h1 class="h1 font-bold text-5xl mb-5">Insert Transaksi</h1>

            <form action="/transaksi" method="post">
                @csrf
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Kode Toko</span>
                    </div>
                    <select class="select select-bordered" name="kode_toko" required>
                        <option disabled selected>Pick one</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </label>
                
                <label class="form-control w-full max-w-xs mt-3">
                    <div class="label">
                        <span class="label-text">Nominal Transaksi</span>
                    </div>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="nominal_transaksi" required min="0"/>
                </label>
                
                <div class="container flex justify-center m-5">
                    <button class="btn btn-accent m-3" type="submit">Save</button>
                </div>

            </form>
            
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
                <!-- Sidebar content here -->
                <li><a>Tranksaksi</a></li>
            </ul>
        </div>
    </div>

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