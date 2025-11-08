  <footer class="p-4 fixed-bottom-footer bg-white">
    <div class="row">
      <div class="col-md-6">
        <div class="text-center text-md-left">
          <p class="mb-0">
            <bdi> {{ trans('footer.rights') }}</bdi> © {{\carbon\carbon::now()->year }}    </p>
        </div>
      </div>
      <div class="col-md-6">
        <ul class="text-center text-md-right">

          <li class="list-inline-item">
            <a href="https://www.facebook.com/LoopLabsDev" target="_blank">
                {{ trans('footer.dev') }} </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
