using Xamarin.Forms;

namespace CurriculumVitaeApp
{
    public partial class FormPage : ContentPage
    {
        public FormPage()
        {
            InitializeComponent();
        }

        private async void OnGenerateCvClicked(object sender, EventArgs e)
        {
            string name = NameEntry.Text;
            string profession = ProfessionEntry.Text;
            string description = DescriptionEditor.Text;
            string experience = ExperienceEntry.Text;
            string education = EducationEntry.Text;

            // Navegar a la página del CV pasando los datos
            await Navigation.PushAsync(new CvPage(name, profession, description, experience, education));
        }
    }
}
