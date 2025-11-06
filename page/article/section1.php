<section id="section-article-intro" class="article-intro-section">
  <div class="container">
    <div class="breadcrumb">
      <a class="breadcrumb-home" href="mockup.php"><?= $_SESSION['lang']['home'] ?></a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="#">News & Event</a>
    </div>

    <div class="article-intro-content">
      <div class="article-intro-text">
        <div class="title-separator"></div>
        <h1 class="article-title">News & Events</h1>
      </div>
      
      <nav class="article-tabs">
        <button onclick="selectedType(this,'shelled')" class="article-tab-link tab-type">View All</button>
        <button onclick="selectedType(this,'powder')" class="article-tab-link tab-type active">Articles</button>
        <button onclick="selectedType(this,'shelled')" class="article-tab-link tab-type">Events</button>
        <button onclick="selectedType(this,'oil')" class="article-tab-link tab-type">Press Release</button>
      </nav>

      <div class="article-filter">
        <div class="wrapper-search">
          <input class="filter-search" type="text" placeholder="Cari Judul Berita">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg>
        </div>
        <!-- <div class="dropdown" id="dropdownfilter">
          
          <button class="dropdown-btn" onclick="toggleDropdown(this.parentElement)">
            Show Filters
            <i class="arrow-left"></i>
          </button>
          <div class="dropdown-content" id="dropdown-content">
            <a href="#">Filter 1</a>
            <a href="#">Filter 2</a>
            <a href="#">Filter 3</a>
          </div>
        </div> -->

        <div class="filter-sort">
          <!-- <p class="filter-caption">Sort By</p>
          <div class="dropdown" id="dropdownfilter">
          
            <button class="dropdown-btn" onclick="toggleDropdown(this.parentElement)">
              Most Recent
              <i class="arrow"></i>
            </button>
            <div class="dropdown-content" id="dropdown-content">
              <a href="#">Filter 1</a>
              <a href="#">Filter 2</a>
              <a href="#">Filter 3</a>
            </div>
          </div> -->
        </div>
        
      </div>
    </div>
  </div>
</section>