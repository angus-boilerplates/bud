@php
    $appliedRules = \Illuminate\Validation\Rules\Password::default()->appliedRules();
@endphp

<div>
    <flux:heading>
        Password requirements
    </flux:heading>
    <ul class="mt-2 max-w-md space-y-1 text-xs list-disc list-inside">
        <li class="{{ $appliedRules['min'] ? 'requirement-active' : 'requirement-inactive' }}">
            Contains at least {{ $appliedRules['min'] }} characters
        </li>

        @if ($appliedRules['letters'])
            <li>Includes letters</li>
        @endif

        @if ($appliedRules['mixedCase'])
            <li>Contains both uppercase and lowercase letters</li>
        @endif

        @if ($appliedRules['numbers'])
            <li>Includes at least one number</li>
        @endif

        @if ($appliedRules['symbols'])
            <li>Contains at least one special character</li>
        @endif
    </ul>
</div>
