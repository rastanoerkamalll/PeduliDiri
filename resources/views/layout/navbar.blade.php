
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto" method="GET" action="/cari">
    {{ csrf_field() }}
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
      </ul>

      <div class="mr-5">
        <select onchange="yesnoCheck(this);" class="form-control form-select" type="search" name="kategori">
          <option value="lokasi">Lokasi</option>
          <option value="jam ">Jam</option>
          <option value="tanggal">Tanggal</option>
          <option value="suhu">Suhu</option>
        </select>
      </div>

      {{-- <div class="col"> 
        <div class="form-group"> 
          <input name="name" id="inputSearch" class="form-control" type="search" placeholder="Cari berdasarkan nama" aria-label="Search" /> 
          <button class="btn outline-success my-2 my-sm-0" id="buttonSearch" type="submit"> 
            <i class="fas fa-search"></i> 
          </button> 
        </div> 
      </div> --}}

      <div class="col">
        <div class="form-group">
          <input name="lokasi" id="iflokasi" class="form-control" type="search" placeholder="Cari berdasarkan lokasi" aria-label="Search" />
          <button  class="btn outline-success my-2 my-sm-0" id="ifBtnlokasi" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="form-group">
          <input style="display:none;" name="tanggal" id="iftanggal" class="form-control" type="date" placeholder="Cari berdasarkan tanggal" aria-label="Search" />
          <button style="display:none;" class="btn outline-success my-2 my-sm-0" id="ifBtntanggal" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="form-group">
          <input style="display:none;" name="jam" id="ifjam" class="form-control" type="search" placeholder="Cari berdasarkan jam" aria-label="Search" />
          <button style="display:none;" class="btn outline-success my-2 my-sm-0" id="ifBtnjam" type="time">
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="form-group">
          <input style="display:none;" name="suhu" id="ifsuhu" class="form-control" type="search" placeholder="Cari berdasarkan suhu" aria-label="Search" />
          <button style="display:none;" class="btn outline-success my-2 my-sm-0" id="ifBtnsuhu" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>

      {{-- <div class="search-element">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        <div class="search-backdrop"></div>
        <div class="search-result">
          <div class="search-header">
            Histories
          </div>
          <div class="search-item">
            <a href="#">{{ old('search') }}</a>
          </div>
        </div>
      </div> --}}

    </form>

    <ul class="navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
          <img alt="image" src="../assets/img/avatar/avatar.png" class="rounded-circle mr-1">
          <div class="d-sm-none d-lg-inline-block">
            @if(!empty(auth()->user()->name))
              {{ auth()->user()->name }}
            @else
              {{ "Anonymous" }}
            @endif
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="/logout" class="dropdown-item has-icon text-danger" onclick="
          event.preventDefault();
          document.getElementById('formLogout').submit();
          ">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
          <form id="formLogout" action="/logout" method="POST">
            {{ csrf_field() }}
          </form>
        </div>
      </li>
    </ul>
  </nav>

<script>
    function yesnoCheck(that) {
      let value = that.value;
      //   // console.log(that.value);

      // inputSearch = document.getElementById("inputSearch");
      // buttonSearch = document.getElementById("buttonSearch");

      // inputSearch.name = value;
      // inputSearch.placeholder = `Cari berdasarkan ${value}`;

      if(value == "tanggal"){
        document.getElementById("iftanggal").style.display = "block";
        document.getElementById("ifBtntanggal").style.display = "block";

        document.getElementById("ifjam").style.display = "none";
        document.getElementById("ifBtnjam").style.display = "none";

        document.getElementById("iflokasi").style.display = "none";
        document.getElementById("ifBtnlokasi").style.display = "none";

        document.getElementById("ifsuhu").style.display = "none";
        document.getElementById("ifBtnsuhu").style.display = "none";

      } else if (value == "lokasi") {
        document.getElementById("iftanggal").style.display = "none";
        document.getElementById("ifBtntanggal").style.display = "none";

        document.getElementById("ifjam").style.display = "none";
        document.getElementById("ifBtnjam").style.display = "none";

        document.getElementById("iflokasi").style.display = "block";
        document.getElementById("ifBtnlokasi").style.display = "block";

        document.getElementById("ifsuhu").style.display = "none";
        document.getElementById("ifBtnsuhu").style.display = "none";

      } else if (value == "suhu") {
        document.getElementById("iftanggal").style.display = "none";
        document.getElementById("ifBtntanggal").style.display = "none";

        document.getElementById("ifjam").style.display = "none";
        document.getElementById("ifBtnjam").style.display = "none";

        document.getElementById("iflokasi").style.display = "none";
        document.getElementById("ifBtnlokasi").style.display = "none";

        document.getElementById("ifsuhu").style.display = "block";
        document.getElementById("ifBtnsuhu").style.display = "block";

    } else {
        document.getElementById("iftanggal").style.display = "none";
        document.getElementById("ifBtntanggal").style.display = "none";

        document.getElementById("ifjam").style.display = "block";
        document.getElementById("ifBtnjam").style.display = "block";

        document.getElementById("iflokasi").style.display = "none";
        document.getElementById("ifBtnlokasi").style.display = "none";

        document.getElementById("ifsuhu").style.display = "none";
        document.getElementById("ifBtnsuhu").style.display = "none";
    }


}

</script>
