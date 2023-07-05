<x-app-layout>
    <div class="max-w-5xl mx-auto p-4 sm:p-6 lg:p-8 relative">
        <x-primary-button class="absolute top-0 right-0 mt-4 mr-6">{{ __('Add Invoice') }}</x-primary-button>
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Invoice ID</th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Ship To</th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Payee</th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Total</th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($invoices as $invoice)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <div class="text-sm leading-5 text-gray-900">{{ $invoice->id }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <div class="text-sm leading-5 text-gray-900">{{ $invoice->created_at->format('j M Y, g:i a') }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <div class="text-sm leading-5 text-gray-900">
                                {{ $invoice->user->name }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <div class="text-sm leading-5 text-gray-900">{{ $invoice->payee }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <div class="text-sm leading-5 text-gray-900">{{ $invoice->total }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <div class="text-sm leading-5 text-gray-900">{{ $invoice->status }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <button class="hover:bg-gray-100 py-2 px-2 rounded focus:outline-none focus:shadow-outline">{{ __('Details') }}</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>