<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDebtReliefSubmissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'financial_difficulty' => 'required|array|min:1',
            'financial_difficulty.*' => 'string',
    
            'debts' => 'required|array|min:1',
            'debts.*' => 'string',
    
            'home_status' => 'required|string|in:Own,Rent,Other',
    
            'debt_amount' => 'required|integer|min:1|max:150000',
    
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
    
            // Phone Number (Phone number validation pattern for (XXX) XXX-XXXX)
            'phone_number' => [
                'required',
                'string',
                'regex:/^\(\d{3}\) \d{3}-\d{4}$/', // Regular expression to match the phone number format (XXX) XXX-XXXX
                'min:10',
            ],
            'address' => 'required|string',
            'email' => 'required|email|max:255',
            'opt_in' => 'required|string',
            'opt_in2' => 'required|string'
        ];
    }
}
