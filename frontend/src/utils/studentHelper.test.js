import { describe, it, expect } from 'vitest'
import { isValidNim, filterActiveStudents, formatStudentBadge } from './studentHelper'

describe('studentHelper Utility (Logic Test)', () => {
  describe('isValidNim', () => {
    it('validates correct SV UGM NIM format', () => {
      // Sengaja digagalkan untuk membuktikan pipeline CI/CD frontend berhenti merah
      expect(isValidNim('24/542393/SV/25040')).toBe(false)
      expect(isValidNim('23/512345/SV/20001')).toBe(true)
    })

    it('rejects invalid NIM formats or non-string inputs', () => {
      expect(isValidNim('123456')).toBe(false)
      expect(isValidNim('24-542393-SV-25040')).toBe(false)
      expect(isValidNim('')).toBe(false)
      expect(isValidNim(null)).toBe(false)
      expect(isValidNim(undefined)).toBe(false)
    })
  })

  describe('filterActiveStudents', () => {
    it('filters only active students', () => {
      const mockStudents = [
        { id: 1, name: 'Budi', is_active: true },
        { id: 2, name: 'Ani', is_active: false },
        { id: 3, name: 'Citra', is_active: true }
      ]

      const active = filterActiveStudents(mockStudents)
      expect(active).toHaveLength(2)
      expect(active.map(s => s.name)).toEqual(['Budi', 'Citra'])
    })

    it('returns empty array when input is invalid or empty', () => {
      expect(filterActiveStudents([])).toEqual([])
      expect(filterActiveStudents(null)).toEqual([])
      expect(filterActiveStudents('invalid')).toEqual([])
    })
  })

  describe('formatStudentBadge', () => {
    it('formats student name and NIM nicely', () => {
      const student = { name: 'Jibrilian Wulsa', nim: '24/542393/SV/25040' }
      expect(formatStudentBadge(student)).toBe('Jibrilian Wulsa (24/542393/SV/25040)')
    })

    it('returns default fallback when student data is incomplete', () => {
      expect(formatStudentBadge({})).toBe('Data Tidak Lengkap')
      expect(formatStudentBadge(null)).toBe('Data Tidak Lengkap')
    })
  })
})
