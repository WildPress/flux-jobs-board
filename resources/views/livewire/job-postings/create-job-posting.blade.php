<form wire:submit="save">
    <input type="text" id="title" wire:model="title">
    <div>
        @error('title')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <input type="datetime-local" id="date_posted" wire:model="date_posted">
    <input type="number" inputmode="decimal" wire:model="base_salary">
    <select id="salary_currency" wire:model="salary_currency">
        <option value="GBP">Pound Sterling (GBP)</option>
    </select>
    <button type="submit">Save</button>
</form>
