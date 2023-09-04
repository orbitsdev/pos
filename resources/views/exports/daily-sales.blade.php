<table>
    <thead>
        <tr>
            <th colspan="5">{{ $day }}</th>
        </tr>
        <tr>
            <th align="left" width="25">Cashier</th>
            <th align="left" width="18">Transaction</th>
            <th align="left" width="15">Status</th>
            <th align="left" width="25">Date</th>
            <th align="left" width="30">Items</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($collections as $item)
            <tr>
                <td align="left" width="25">{{ $item->user->name }}</td>
                <td align="left" width="18">{{ $item->id ?? 'Not Specified' }}</td>
                <td align="left" width="15">{{ ucfirst($item->status )}}</td>
                <td align="left" width="25">{{ $item->created_at->format('F d Y h:i A') }}</td>
                <td align="left" width="30">
                    <table>
                        <tr>
                            <th align="left" width="25">Item Name</th>
                            <th align="left" width="15">Item Price</th>
                            <th align="left" width="15">Item Quantity</th>
                            <th align="left" width="18">Item Subtotal</th>
                        </tr>
                        @forelse($item->itemTransactions as $itemTransaction)
                            <tr>
                                <td align="left">{{ $itemTransaction->product->name }}</td>
                                <td align="left">{{ $itemTransaction->product->price }}</td>
                                <td align="left">{{ $itemTransaction->quantity }}</td>
                                <td align="left">{{number_format($itemTransaction->product->price * $itemTransaction->quantity) }}</td>
                            </tr>
                        @empty
                            <!-- No item transactions -->
                        @endforelse
                        <tr>
                            <td align="left">Total</td>
                            <td align="left"></td>
                            <td align="left"></td>
                            <td align="left">{{ number_format($item->itemTransactions->sum(function ($item) {
                                    return $item->quantity * $item->product->price;  
                                }))}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        @empty
            <!-- No data available -->
        @endforelse
    </tbody>
</table>
