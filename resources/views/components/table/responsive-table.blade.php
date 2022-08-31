<div class="flex items-center justify-center bg-gray-900">
  <div class="overflow-auto lg:overflow-visible w-full">
    <table class="table-auto border-spacing-y-1 text-gray-400 border-separate space-y-6 text-sm w-full">
      <thead class="bg-gray-800 text-gray-500">
        <tr>
          {{ $headers }}
        </tr>
      </thead>
      <tbody>
        {{ $body }}
      </tbody>
    </table>
  </div>
</div>