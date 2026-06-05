<!DOCTYPE html>
<html>

<head>
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
</head>

<body>


  <header>
    <a href="/">
      <img src="/wp-content/uploads/2026/05/logo.svg" class="logo" alt="" />
    </a>
    <div class="d-none d-lg-block">
      <div class="menu">
        <a href="/">Home</a>
        <a href="/about">About UgokiUi</a>
        <a href="/component-library">Component Library</a>
        <a href="/about/#how-to-use">How to Use</a>
      </div>
    </div>
    <div class="d-none d-lg-block">
      <div class="cta-header">
        <a href="#" class="bt-s-auto g-1">
          Donate
          <img src="/wp-content/uploads/2026/05/thumb.svg" alt="" />
        </a>
        <a href="https://discord.gg/xQjXxdN3" target="_blank" class="bt-icon">
          <img src="/wp-content/uploads/2026/05/discod.svg" alt="" />
        </a>
        <a href="https://github.com/ugokiui/ugokiui-files.git" target="_blank" class="bt-icon">
          <img src="/wp-content/uploads/2026/05/github.svg" alt="" />
        </a>
        <a href="https://figma.com/@ugokiui" target="_blank" class="bt-icon">
          <img src="/wp-content/uploads/2026/05/figma.svg" alt="" />
        </a>
      </div>
    </div>
    <div class="d-lg-none">
      <a href="#" class="bt-icon" onclick="openMenuModal()">
        <i class="ti ti-menu-3"></i>
      </a>
    </div>
  </header>

  <!-- offcanvas -->
  <div class="offcanvas-backdrop" id="menu-backdrop" onclick="closeMenuModal()"></div>
  <div class="offcanvas" id="menu-modal-box">
    <div class="offcanvas-header">
      <button class="close-btn" onclick="closeMenuModal()">✕</button>
    </div>

    <nav class="offcanvas-menu">
		<a href="/">Home</a>
      <a href="/about">About UgokiUi</a>
      <a href="/component-library">Component Library</a>
      <a href="/about/#how-to-use">How to use</a>
      <div class="small">
        <a href="/faq">FAQ</a>
        <a href="/#newrelease">New Releases</a>
        <a href="#">Donate</a>
        <a href="/terms-condition">Terms and Conditions</a>
      </div>
      <div class="cta-header d-flex g-2">
        <a href="https://discord.gg/xQjXxdN3" class="bt-icon">
          <img src="/wp-content/uploads/2026/05/discod.svg" alt="" />
        </a>
        <a href="https://github.com/ugokiui/ugokiui-files.git" class="bt-icon">
          <img src="/wp-content/uploads/2026/05/github.svg" alt="" />
        </a>
        <a href="https://figma.com/@ugokiui" class="bt-icon">
          <img src="/wp-content/uploads/2026/05/figma.svg" alt="" />
        </a>
      </div>
    </nav>
  </div>
