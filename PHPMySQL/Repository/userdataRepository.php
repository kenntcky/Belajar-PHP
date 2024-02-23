<?php


namespace Repository {
    use Model\userdata;

    interface userdataRepository
    {
        function insert(userdata $userdata): userdata;

        function findById(int $id): ?userdata;

        function findAll(): array;

    }

    class userdataImpls implements userdataRepository {

        public function __construct(private \PDO $connection){}

        public function insert(userdata $userdata): userdata
        {
            $sql = "INSERT INTO userdata(username, password) VALUES(?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$userdata->getUsername(), $userdata->getPassword()]);

            $id = $this->connection->lastInsertId();
            $userdata->setId($id);
            return $userdata;
        }

        public function findById(int $id): ?userdata
        {
            $sql = "SELECT * FROM userdata WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);

            if ($row = $statement->fetch()) {
                return new userdata(
                    id: $row["id"],
                    username: $row["username"],
                    password: $row["password"]
                );
            } else {
                return null;
            }
        }

        public function findAll(): array
        {
            $sql = "SELECT * FROM userdata";
            $statement = $this->connection->query($sql);

            $userdatas = [];

            while ($row = $statement->fetch()) {
                $userdatas[] = new userdata(
                    id: $row["id"],
                    username: $row["username"],
                    password: $row["password"]
                );
            }

            return $userdatas;
        }
    }
}
