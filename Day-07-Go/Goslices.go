package main
import "fmt"
func main() {
	languages := []string{
		"Go",	
		"python",
		"javascript",
	}
	for _, language := range languages {
		fmt.println(language)
	}
}