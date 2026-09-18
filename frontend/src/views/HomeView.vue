<template>
  <div class="home-container">
    <div class="hero-card">
      <h2>Praktikum Continuous Deployment Frontend (Vue 3)</h2>
      <p class="subtitle">
        Aplikasi Single Page Application (SPA) mandiri yang terhubung dengan REST API Laravel melalui variabel lingkungan <code>VITE_API_URL</code>.
      </p>
      <div class="card-grid">
        <div class="feature-box">
          <div class="icon">🚀</div>
          <h3>Vue Router</h3>
          <p>Dua rute halaman independen (Beranda & Data Mahasiswa) dengan client-side routing.</p>
        </div>
        <div class="feature-box">
          <div class="icon">🔌</div>
          <h3>API Dinamis</h3>
          <p>Alamat endpoint diambil secara dinamis dari <code>VITE_API_URL</code> tanpa hardcoded.</p>
        </div>
        <div class="feature-box">
          <div class="icon">⚡</div>
          <h3>CI/CD Pipeline</h3>
          <p>Divalidasi dengan alur 4-job di GitHub Actions (Lint &rarr; Test &rarr; Build &rarr; Deploy).</p>
        </div>
      </div>
      <div class="cta-section">
        <RouterLink to="/students" class="btn-primary">Lihat Data Mahasiswa &rarr;</RouterLink>
      </div>
    </div>
  </div>
</template>

<style scoped>
.hero-card {
  background: white;
  padding: 2.5rem;
  border-radius: 1rem;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  border: 1px solid #e2e8f0;
}
h2 {
  font-size: 1.75rem;
  color: #0f172a;
  margin-bottom: 0.75rem;
}
.subtitle {
  color: #475569;
  line-height: 1.6;
  margin-bottom: 2rem;
  font-size: 1rem;
}
.card-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 1.5rem;
  margin-bottom: 2rem;
}
.feature-box {
  padding: 1.25rem;
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 0.75rem;
}
.icon {
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
}
.feature-box h3 {
  font-size: 1rem;
  color: #1e293b;
  margin-bottom: 0.25rem;
}
.feature-box p {
  font-size: 0.875rem;
  color: #64748b;
  line-height: 1.5;
}
.cta-section {
  display: flex;
  justify-content: flex-start;
}
.btn-primary {
  display: inline-block;
  background: #059669;
  color: white;
  text-decoration: none;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  border-radius: 0.5rem;
  transition: background 0.2s;
}
.btn-primary:hover {
  background: #047857;
}
</style>
