<x-filament-panels::page>
    <div class="p-6">
        @if($businesses->isEmpty())
            <p>You don't have any business.</p>
        @else
            <div class="space-y-6">
                @foreach($businesses as $business)
                    <div class="bg-white shadow rounded-lg p-4 w-full">
                        <h2 class="text-xl font-semibold mb-2">{{ $business->name }}</h2>
                        <p class="text-gray-600">
                            <span class="font-medium">Domain:</span> {{ $business->domain }}
                        </p>
                        <p class="text-gray-600">
                            <span class="font-medium">Status:</span> {{ $business->status }}
                        </p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-filament-panels::page>
