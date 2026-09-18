<template>
  <div class="students-container">
    <div class="header-row">
      <div>
        <h2>Daftar Mahasiswa (Dari Laravel API)</h2>
        <p class="api-info">
          Endpoint: <code>{{ apiUrl }}/students</code>
        </p>
      </div>
      <button class="btn-refresh" @click="fetchStudents" :disabled="loading">
        {{ loading ? 'Memuat...' : 'Muat Ulang' }}
      </button>
    </div>

    <div v-if="loading" class="state-card loading">
      <div class="spinner"></div>
      <p>Mengambil data dari server backend...</p>
    </div>

    <div v-else-if="error" class="state-card error">
      <p class="error-title">Gagal Mengambil Data</p>
      <p class="error-detail">{{ error }}</p>
      <p class="hint">Pastikan backend Laravel sedang berjalan (<code>php artisan serve</code>).</p>
    </div>

    <div v-else-if="students.length === 0" class="state-card empty">
      <p>Belum ada data mahasiswa yang tersimpan di basis data.</p>
    </div>

    <div v-else class="table-card">
      <table class="students-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Program Studi</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(student, index) in students" :key="student.id">
            <td>{{ index + 1 }}</td>
            <td class="font-medium">{{ student.name }}</td>
            <td><code>{{ student.nim }}</code></td>
            <td>{{ student.email }}</td>
            <td><span class="prodi-tag">{{ student.study_program }}</span></td>
            <td>
              <span :class="['status-badge', student.is_active ? 'active' : 'inactive']">
                {{ student.is_active ? 'Aktif' : 'Non-Aktif' }}
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const apiUrl = import.meta.env.VITE_API_URL || 'http://127.0.0.1:8000/api'
const students = ref([])
const loading = ref(true)
const error = ref(null)

async function fetchStudents() {
  loading.value = true
  error.value = null
  try {
    const res = await fetch(`${apiUrl}/students`)
    if (!res.ok) {
      throw new Error(`HTTP Error: ${res.status} ${res.statusText}`)
    }
    const data = await res.json()
    students.value = Array.isArray(data) ? data : (data.data || [])
  } catch (err) {
    error.value = err.message || 'Terjadi kendala saat menghubungi server'
  } finally {
    loading.value = false
  }
}

onMounted(() => {
  fetchStudents()
})
</script>

<style scoped>
.header-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1.5rem;
  flex-wrap: wrap;
  gap: 1rem;
}
h2 {
  font-size: 1.5rem;
  color: #0f172a;
}
.api-info {
  font-size: 0.8125rem;
  color: #64748b;
  margin-top: 0.25rem;
}
.api-info code {
  background: #e2e8f0;
  padding: 0.125rem 0.375rem;
  border-radius: 0.25rem;
  color: #0f172a;
}
.btn-refresh {
  background: #059669;
  color: white;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 0.375rem;
  font-weight: 500;
  cursor: pointer;
  transition: background 0.2s;
}
.btn-refresh:hover:not(:disabled) {
  background: #047857;
}
.btn-refresh:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}
.state-card {
  background: white;
  padding: 2.5rem;
  border-radius: 0.75rem;
  text-align: center;
  border: 1px solid #e2e8f0;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
}
.state-card.error {
  border-color: #fecaca;
  background-color: #fef2f2;
}
.error-title {
  font-weight: 600;
  color: #b91c1c;
}
.error-detail {
  color: #dc2626;
  font-size: 0.875rem;
  margin: 0.5rem 0;
}
.hint {
  color: #6b7280;
  font-size: 0.8125rem;
}
.table-card {
  background: white;
  border-radius: 0.75rem;
  overflow: hidden;
  border: 1px solid #e2e8f0;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
}
.students-table {
  width: 100%;
  border-collapse: collapse;
  text-align: left;
}
.students-table th {
  background: #f8fafc;
  padding: 0.75rem 1rem;
  font-size: 0.75rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: #475569;
  border-bottom: 1px solid #e2e8f0;
}
.students-table td {
  padding: 0.875rem 1rem;
  font-size: 0.875rem;
  color: #334155;
  border-bottom: 1px solid #f1f5f9;
}
.font-medium {
  font-weight: 500;
  color: #0f172a;
}
.prodi-tag {
  display: inline-block;
  background: #eff6ff;
  color: #1d4ed8;
  padding: 0.2rem 0.5rem;
  border-radius: 0.25rem;
  font-size: 0.75rem;
  font-weight: 500;
}
.status-badge {
  display: inline-block;
  padding: 0.2rem 0.5rem;
  border-radius: 9999px;
  font-size: 0.75rem;
  font-weight: 600;
}
.status-badge.active {
  background: #dcfce7;
  color: #15803d;
}
.status-badge.inactive {
  background: #fee2e2;
  color: #b91c1c;
}
</style>
