<template>
  <div class="app-layout">
    <header class="navbar">
      <div class="nav-container">
        <div class="brand">
          <span class="badge">KEPL</span>
          <span class="brand-title">Portal Mahasiswa</span>
        </div>
        <nav class="nav-links">
          <RouterLink to="/" class="nav-link" active-class="active">Beranda</RouterLink>
          <RouterLink to="/students" class="nav-link" active-class="active">Data Mahasiswa</RouterLink>
        </nav>
      </div>
    </header>

    <main class="main-content">
      <RouterView />
    </main>

    <footer class="app-footer">
      <p>&copy; 2026 Jibrilian Wulsa Ariswanto &bull; Konstruksi &amp; Evolusi Perangkat Lunak</p>
    </footer>
  </div>
</template>

<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  background-color: #f8fafc;
  color: #1e293b;
  min-height: 100vh;
}
.app-layout {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
.navbar {
  background-color: #ffffff;
  border-bottom: 1px solid #e2e8f0;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}
.nav-container {
  max-width: 1024px;
  margin: 0 auto;
  padding: 1rem 1.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.brand {
  display: flex;
  align-items: center;
  gap: 0.75rem;
}
.badge {
  background-color: #059669;
  color: #ffffff;
  font-size: 0.75rem;
  font-weight: 700;
  padding: 0.25rem 0.5rem;
  border-radius: 9999px;
  letter-spacing: 0.05em;
}
.brand-title {
  font-weight: 600;
  font-size: 1.125rem;
  color: #0f172a;
}
.nav-links {
  display: flex;
  gap: 1rem;
}
.nav-link {
  text-decoration: none;
  color: #64748b;
  font-weight: 500;
  font-size: 0.875rem;
  padding: 0.5rem 0.75rem;
  border-radius: 0.375rem;
  transition: all 0.2s;
}
.nav-link:hover {
  color: #059669;
  background-color: #f0fdf4;
}
.nav-link.active {
  color: #059669;
  background-color: #dcfce7;
  font-weight: 600;
}
.main-content {
  flex: 1;
  max-width: 1024px;
  width: 100%;
  margin: 0 auto;
  padding: 2rem 1.5rem;
}
.app-footer {
  text-align: center;
  padding: 1.5rem;
  color: #94a3b8;
  font-size: 0.8125rem;
  border-top: 1px solid #e2e8f0;
  background-color: #ffffff;
}
</style>
