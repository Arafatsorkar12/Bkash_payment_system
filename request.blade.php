 <form action="{{ route('bkash.payment') }}" method="POST" style="display: inline-block;">
    @csrf
    <input type="hidden" name="amount" value="{{$amount ?? ''  }}">
    <input type="hidden" name="order_id" value="{{ $id ?? '' }}">
    <input type="hidden" name="cus_name" value="{{ $company->name }}">
    <input type="hidden" name="cus_email" value="{{ $company->email }}">
    <input type="hidden" name="cus_phone" value="{{ $company->phone_number }}">
    <input type="hidden" name="cus_address_1" value="{{ $company->head_office }}">
    <input type="hidden" name="success_url" value="{{ route('software_payments.paid') }}">
    <input type="submit" style="color: blue" value="Pay with bKash" class="pay-submit-button">
</form>
