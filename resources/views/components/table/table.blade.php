<div>
    <div class="table-resposive">
        <table class="table table-striped">

                {{$head}}

            <tbody>

                {{$slot}}
            </tbody>
        </table>

    {{$pages ?? ''}}
    </div>
</div>
