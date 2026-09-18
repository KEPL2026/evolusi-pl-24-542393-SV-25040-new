/**
 * Memvalidasi apakah format NIM mahasiswa sesuai standar SV UGM (mis. 24/542393/SV/25040)
 * @param {string} nim
 * @returns {boolean}
 */
export function isValidNim(nim) {
  if (!nim || typeof nim !== 'string') return false
  const regex = /^\d{2}\/\d{6}\/SV\/\d{5}$/
  return regex.test(nim.trim())
}

/**
 * Memfilter daftar mahasiswa yang aktif
 * @param {Array} students
 * @returns {Array}
 */
export function filterActiveStudents(students) {
  if (!Array.isArray(students)) return []
  return students.filter(student => Boolean(student && student.is_active))
}

/**
 * Format label ringkasan mahasiswa
 * @param {Object} student
 * @returns {string}
 */
export function formatStudentBadge(student) {
  if (!student || !student.name || !student.nim) return 'Data Tidak Lengkap'
  return `${student.name} (${student.nim})`
}
