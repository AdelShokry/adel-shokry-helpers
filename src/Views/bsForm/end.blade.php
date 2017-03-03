
</div>
    <div class="form-actions">

        @if (isset($options['submit']) )
            <button type="submit" class="btn blue">{{ trans('lang.'.$options['submit']) }}</button>
        @endif
        @if (isset($options['reset']) && $options['reset'] == true)
            <button type="reset" class="btn default">{{ trans('lang.'.'reset') }}</button>
        @endif
    </div>
</form>
</div>
</div>
             
