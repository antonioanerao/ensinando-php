<?php


class QueryBuilder
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function insert($table, $parameters) {
        // Montar a query
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ' , array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            // Preparar a query
            $statement = $this->pdo->prepare($sql);

            // Executar a query
            $statement->execute($parameters);
        } catch (Exception $exception) {
            die($exception->getMessage());
        }

        return true;
    }
}