<x-app-layout>
  
  <x-slot name="scripts">
    <script src="{{ mix('js/simulator.js') }}" defer></script>
  </x-slot>

  <div class="grid grid-cols-8 gap-2 justify-center">
    <div class="col-start-3 col-span-4">
      <div id="app"></div>
    </div>
  </div>

</x-app-layout>