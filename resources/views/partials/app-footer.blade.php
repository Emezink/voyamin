<footer class="app-footer">
    <div class="site-footer-right">       
        {!! __('voyager::theme.footer_copyright') !!} <a href="http://thecontrolgroup.com" target="_blank">TCG</a>
        @php $version = Voyager::getVersion(); @endphp
        @if (!empty($version))
            - {{ $version }}
        @endif
    </div>
</footer>
