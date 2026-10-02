<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    <div>
        <x-input-label for="song_title" value="Song Title" />
        <x-text-input id="song_title" name="song_title" type="text" class="mt-1 block w-full !rounded-card" :value="old('song_title', $session->song_title ?? '')" required />
        <x-input-error :messages="$errors->get('song_title')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="played_at" value="Played At" />
        <x-text-input id="played_at" name="played_at" type="datetime-local" class="mt-1 block w-full !rounded-card" :value="old('played_at', isset($session) ? $session->played_at->format('Y-m-d\TH:i') : now()->format('Y-m-d\TH:i'))" required />
        <x-input-error :messages="$errors->get('played_at')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="difficulty" value="Difficulty Grade" />
        <select id="difficulty" name="difficulty" class="mt-1 block w-full border-ink/30 rounded-card shadow-sm focus:border-pine focus:ring-pine">
            @foreach (['easy' => 'Easy — soft grade', 'medium' => 'Medium — steady grade', 'hard' => 'Hard — firm grade'] as $value => $label)
                <option value="{{ $value }}" @selected(old('difficulty', $session->difficulty ?? 'easy') === $value)>{{ $label }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('difficulty')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="hand_used" value="Hand Used" />
        <select id="hand_used" name="hand_used" class="mt-1 block w-full border-ink/30 rounded-card shadow-sm focus:border-pine focus:ring-pine">
            @foreach (['left' => 'Left', 'right' => 'Right', 'both' => 'Both'] as $value => $label)
                <option value="{{ $value }}" @selected(old('hand_used', $session->hand_used ?? 'right') === $value)>{{ $label }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('hand_used')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="score" value="Score" />
        <x-text-input id="score" name="score" type="number" min="0" class="mt-1 block w-full !rounded-card tnum" :value="old('score', $session->score ?? 0)" required />
        <x-input-error :messages="$errors->get('score')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="max_combo" value="Max Combo" />
        <x-text-input id="max_combo" name="max_combo" type="number" min="0" class="mt-1 block w-full !rounded-card tnum" :value="old('max_combo', $session->max_combo ?? 0)" required />
        <x-input-error :messages="$errors->get('max_combo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="accuracy" value="Accuracy (%)" />
        <x-text-input id="accuracy" name="accuracy" type="number" step="0.01" min="0" max="100" class="mt-1 block w-full !rounded-card tnum" :value="old('accuracy', $session->accuracy ?? 0)" required />
        <x-input-error :messages="$errors->get('accuracy')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="duration_seconds" value="Duration (seconds)" />
        <x-text-input id="duration_seconds" name="duration_seconds" type="number" min="10" max="3600" class="mt-1 block w-full !rounded-card tnum" :value="old('duration_seconds', $session->duration_seconds ?? 60)" required />
        <x-input-error :messages="$errors->get('duration_seconds')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="gestures_hit" value="Gestures Hit" />
        <x-text-input id="gestures_hit" name="gestures_hit" type="number" min="0" class="mt-1 block w-full !rounded-card tnum" :value="old('gestures_hit', $session->gestures_hit ?? 0)" required />
        <x-input-error :messages="$errors->get('gestures_hit')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="gestures_missed" value="Gestures Missed" />
        <x-text-input id="gestures_missed" name="gestures_missed" type="number" min="0" class="mt-1 block w-full !rounded-card tnum" :value="old('gestures_missed', $session->gestures_missed ?? 0)" required />
        <x-input-error :messages="$errors->get('gestures_missed')" class="mt-2" />
    </div>
    <div class="md:col-span-2">
        <x-input-label for="notes" value="Therapist Notes (optional)" />
        <textarea id="notes" name="notes" rows="3" class="mt-1 block w-full border-ink/30 rounded-card shadow-sm focus:border-pine focus:ring-pine">{{ old('notes', $session->notes ?? '') }}</textarea>
        <x-input-error :messages="$errors->get('notes')" class="mt-2" />
    </div>
</div>
