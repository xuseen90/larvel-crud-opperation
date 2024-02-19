<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class=" max-w-6xl mt-24 container w-full mx-auto h-screen">

    <div class="flex justify-between items-center mb-4">
        
     <h1 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">List All</span> Customer</h1>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 
    focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 
    py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 
    dark:focus:ring-blue-800">
       <a href="{{url('/create')}}"> 
        Add Customer
       </a>
     </button>
    </div>



<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    tell
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
         
            @foreach($customer as $cus)
           
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">
                    {{$cus->id}}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$cus->name}}
                </th>
                <td class="px-6 py-4">
                   {{$cus->tell}}
                </td>
                <td class="px-6 py-4">
                    {{$cus->email}}
                </td>
                <td class="px-6 py-4">
                  {{$cus->address}}
                </td>
                <td>
                <span class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-gray-800 bg-gray-100 rounded dark:bg-gray-700 dark:text-gray-300">
                   <a href=" {{ url('customer/'.$cus->id.'/edit') }} ">Edit</a>
               </span>
                  

               <span id="badge-dismiss-red" class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-red-800 bg-red-100 rounded dark:bg-red-900 dark:text-red-300">
               <a href=" {{ url('customer/'.$cus->id.'/delete') }} ">Delete</a>
               </span>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    </div>
</body>
</html>