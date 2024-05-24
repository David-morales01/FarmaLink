 <div class="w-full">
     <form wire:submit.prevent="submit" class="bg-white px-8 py-10 pb-8 mb-4   ">
         <div class="grid grid-cols-2">
             <div class="mb-4 mr-1">
                 <label class="block text-gray-700 text-sm font-bold mb-2" style="float: left;" for="p_title">
                     Nombre
                 </label>
                 <input
                     class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                     type="text" wire:model="name" placeholder="Nombre del Medicamento">

             </div>
             <div class="mb-4 ml-1">
                 <label class="block text-gray-700 text-sm font-bold mb-2">
                     Price
                 </label>
                 <input
                     class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                     type="number" wire:model="price" placeholder="Precio">

             </div>
             <div class="mb-4 ml-1 col-span-2">
                 <label class="block text-gray-700 text-sm font-bold mb-2">
                     Descripción
                 </label>
                 <textarea
                     class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                     type="text" wire:model="description" placeholder="Descripción"></textarea>

             </div>

         </div>
         <button class="btn w-25 px-6 rounded py-4 bg-indigo-800 text-white" type="submit">Guardar</button>
     </form>
 </div>
