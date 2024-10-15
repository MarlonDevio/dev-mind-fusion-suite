<form id="bulk-variations-form" class="mt-6" method="post" action="{{ wc_get_cart_url() }}">
    @csrf
    <div class="overflow-x-auto shadow-lg shadow-sky-900/[0.1]">
        <table class="w-full text-left border-collapse bulk-variations-table">
            <thead>
                <!-- Eerste headerrij -->
                <tr class="border-solid border-[0.1px] border-slate-800">
                    <th rowspan="2" class="py-2 px-2 border-solid bg-slate-400 border-[0.2px] border-slate-800">Kleuren
                    </th>
                    <th colspan="{{ count($sizes) }}"
                        class="py-2 px-2 border-solid bg-slate-200 border-[0.5px] border-slate-800">Maten</th>
                </tr>
                <!-- Tweede headerrij -->
                <tr class="border-solid border-[0.5px] border-slate-800">
                    @foreach ($sizes as $size)
                        <th class="py-2 px-2 border-solid bg-slate-200 border-[0.5px] border-slate-800">
                            {{ $size }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($colors as $color)
                    <tr class="border-solid border-[0.5px] border-slate-800">
                        <td class="py-2 px-2 bg-slate-200">{{ $color }}</td>
                        @foreach ($sizes as $size)
                            @php
                                $key = "{$color}_{$size}";
                                $variation_id = $variation_map[$key] ?? null;
                            @endphp
                            @if ($variation_id)
                                <td class="py-2 px-2">
                                    <input type="number" name="quantity[{{ $variation_id }}]" value="0"
                                        min="0" class="py-1 px-2 w-full rounded border">
                                </td>
                            @else
                                <td class="py-2 px-2 text-red-500">Niet beschikbaar</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button type="submit" class="py-2 px-4 mt-4 font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">
        {{ __('Add to Cart', 'bulk-variations-plugin') }}
    </button>
    {!! \wp_nonce_field('bulk_variations_nonce', 'bulk_variations_nonce_field', true, false) !!}
</form>
