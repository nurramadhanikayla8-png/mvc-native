<?php
class Buku
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, judul, penulis, penerbit, tahun_terbit, kategori 
             FROM buku ORDER BY judul'
        );
        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->db->prepare(
            'SELECT id, judul, penulis, penerbit, tahun_terbit, kategori 
             FROM buku WHERE id = :id'
        );
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function insert(array $data): bool
    {
        $sql = 'INSERT INTO buku 
                (judul, penulis, penerbit, tahun_terbit, kategori)
                VALUES (:judul, :penulis, :penerbit, :tahun_terbit, :kategori)';

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':judul' => $data['judul'],
            ':penulis' => $data['penulis'],
            ':penerbit' => $data['penerbit'],
            ':tahun_terbit' => $data['tahun_terbit'],
            ':kategori' => $data['kategori']
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql = 'UPDATE buku
                SET judul = :judul,
                    penulis = :penulis,
                    penerbit = :penerbit,
                    tahun_terbit = :tahun_terbit,
                    kategori = :kategori
                WHERE id = :id';

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':judul' => $data['judul'],
            ':penulis' => $data['penulis'],
            ':penerbit' => $data['penerbit'],
            ':tahun_terbit' => $data['tahun_terbit'],
            ':kategori' => $data['kategori']
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            'DELETE FROM buku WHERE id = :id'
        );

        return $stmt->execute([':id' => $id]);
    }
}
?>