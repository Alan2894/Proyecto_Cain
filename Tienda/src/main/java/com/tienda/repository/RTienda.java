package com.tienda.repository;

import java.util.Optional;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;
import com.tienda.model.Cliente;

@Repository
public interface RTienda extends CrudRepository<Cliente, Integer>{
    Optional<Cliente> findByEmail(String email);

}