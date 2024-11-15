
from ariadne import QueryType, make_executable_schema, load_schema_from_path
from ariadne.asgi import GraphQL
import uvicorn
from resolvers import resolve_welcome, resolve_bookInfo, resolve_getBook

type_defs = load_schema_from_path("schema.graphql")

query = QueryType()

# Asignar los resolvers a los campos 
query.set_field("welcome", resolve_welcome)
query.set_field("bookInfo", resolve_bookInfo)
query.set_field("getBook", resolve_getBook)

# Crear el esquema ejecutable
schema = make_executable_schema(type_defs, query)

app = GraphQL(schema)

if __name__ == "__main__":
    uvicorn.run(app, host="127.0.0.1", port=8000)
